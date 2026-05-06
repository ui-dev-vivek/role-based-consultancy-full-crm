import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
// import { HeroUIProvider } from "@heroui/react";

// Import components
import HeroButton from './components/HeroButton';

const components = {
    'HeroButton': HeroButton,
};

document.addEventListener('DOMContentLoaded', () => {
    const rootElements = document.querySelectorAll('[data-component]');

    rootElements.forEach(el => {
        const componentName = el.getAttribute('data-component');
        const Component = components[componentName];

        if (Component) {
            const props = JSON.parse(el.getAttribute('data-props') || '{}');
            const root = createRoot(el);
            root.render(
                <React.Fragment>
                    <Component {...props} />
                </React.Fragment>
            );
        }
    });
});

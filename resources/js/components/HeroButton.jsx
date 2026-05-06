import React from 'react';
import { Button } from "@heroui/react";

export default function HeroButton({ label, ...props }) {
    return (
        <Button
            color="primary"
            variant="flat"
            className="font-semibold"
            {...props}
        >
            {label || "Hero Button"}
        </Button>
    );
}

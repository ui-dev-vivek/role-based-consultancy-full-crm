// ==========================
// USERS & AUTH
// ==========================
Table users {
  id bigint [pk, increment]
  email varchar [unique, not null]
  password varchar

  user_type enum('core','sales','partner')
  status enum('active','inactive')

  created_at datetime
  updated_at datetime
}

Table user_profiles {
  id bigint [pk, increment]
  user_id bigint [unique, ref: > users.id]

  first_name varchar
  last_name varchar
  phone_no varchar

  address_line_1 varchar
  address_line_2 varchar
  city varchar
  state varchar
  country varchar
  pincode int
}

// ==========================
// RBAC (Roles & Permissions)
// ==========================
Table roles {
  id int [pk, increment]
  role_type enum('core','sales','partner')
  role_name varchar
}

Table permissions {
  id int [pk, increment]
  code varchar [unique, not null]
  description varchar
}

Table role_permission_map {
  id bigint [pk, increment]
  role_id int [ref: > roles.id]
  permission_id int [ref: > permissions.id]
}

Table user_role_map {
  id bigint [pk, increment]
  user_id bigint [ref: > users.id]
  role_id int [ref: > roles.id]
}

// ==========================
// PARTNERS (Business Entity)
// ==========================
Table partners {
  id bigint [pk, increment]

  partner_name varchar
  organization_name varchar
  partner_email varchar
  partner_phone varchar

  created_by_user_id bigint [ref: > users.id]
  created_by_role enum('admin','sales')

  status enum('active','blocked')

  address_line_1 varchar
  address_line_2 varchar
  city varchar
  state varchar
  country varchar
  pincode int

  billing_to varchar
  billing_address_same boolean

  billing_address_line_1 varchar
  billing_address_line_2 varchar
  billing_city varchar
  billing_state varchar
  billing_country varchar
  billing_pincode int

  created_at datetime
  updated_at datetime
}

// ==========================
// PARTNER LOGIN MAPPING
// ==========================
Table partner_users {
  id bigint [pk, increment]

  partner_id bigint [ref: > partners.id]
  user_id bigint [ref: > users.id]

  role_id int [ref: > roles.id] // role_type = 'partner'
  status enum('active','inactive')

  created_at datetime
}

// ==========================
// PARTNER TYPES
// ==========================
Table partner_types {
  id int [pk, increment]
  type_name enum('ad_partner','data_partner','government_partner')
}

Table partner_type_map {
  id bigint [pk, increment]
  partner_id bigint [ref: > partners.id]
  partner_type_id int [ref: > partner_types.id]
}

// ==========================
// CITIES & WEBSITES
// ==========================|

Table languages{
  id int [pk, increment]
  name varchar
  code varchar [default: 'hi']
  slug varchar
  status tinyint
}

Table locations {
  id int [pk, increment]
  name varchar
  top varchar
  location_type enum('city','country')
  analytics_id int [null]
  status enum('active','inactive')
}

table language_locations{
  id int [pk,increment]
  language_id int [ref:> languages.id]
  location_id int [ref:> locations.id]
  locale_name varchar [null]
  loction_content_id varchar [not null]
  speakers int [default: 0]
  mt_populations int [default: 0]
}


Table city_websites {
  id int [pk, increment]
  location_id int [ref: > locations.id]
  language_id int [ref: > languages.id]
  web_name varchar
  web_url varchar
}

Table user_language_location_access {
  id bigint [pk, increment]

  user_id bigint [ref: > users.id]
  partner_id bigint [null, ref: > partners.id]

  language_location_id int [ref: > language_locations.id]

  status enum('active','inactive')
  created_at datetime
}
Table partner_plans {
  id int [pk, increment]

  plan_code varchar [unique]  // free, basic, pro, enterprise
  plan_name varchar
  price int
  status enum('active','inactive')

  created_at datetime
}

Table partner_plan_features {
  id bigint [pk, increment]

  plan_id int [ref: > partner_plans.id]

  feature_code varchar   // max_cities, max_languages, analytics_level
  feature_value varchar  // 1, 5, full, limited

  created_at datetime
}
Table partner_subscriptions {
  id bigint [pk, increment]

  partner_id bigint [ref: > partners.id]
  plan_id int [ref: > partner_plans.id]

  starts_at datetime
  ends_at datetime [null]

  status enum('active','expired','suspended')

  created_at datetime
}


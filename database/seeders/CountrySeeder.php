<?php


namespace Database\Seeders;


use App\Enums\CountryStatus;
use Illuminate\Database\Seeder;

use App\Models\Country;


class CountrySeeder extends Seeder

{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()

    {
        Country::truncate();

        $countries = [
            ['name' => 'Afghanistan', 'code' => 'AF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Åland Islands', 'code' => 'AX', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Albania', 'code' => 'AL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Algeria', 'code' => 'DZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'American Samoa', 'code' => 'AS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Andorra', 'code' => 'AD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Angola', 'code' => 'AO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Anguilla', 'code' => 'AI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Antarctica', 'code' => 'AQ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Antigua and Barbuda', 'code' => 'AG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Argentina', 'code' => 'AR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Armenia', 'code' => 'AM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Aruba', 'code' => 'AW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Australia', 'code' => 'AU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Austria', 'code' => 'AT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Azerbaijan', 'code' => 'AZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bahamas', 'code' => 'BS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bahrain', 'code' => 'BH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bangladesh', 'code' => 'BD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Barbados', 'code' => 'BB', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Belarus', 'code' => 'BY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Belgium', 'code' => 'BE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Belize', 'code' => 'BZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Benin', 'code' => 'BJ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bermuda', 'code' => 'BM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bhutan', 'code' => 'BT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bolivia, Plurinational State of', 'code' => 'BO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bosnia and Herzegovina', 'code' => 'BA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Botswana', 'code' => 'BW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bouvet Island', 'code' => 'BV', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Brazil', 'code' => 'BR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'British Indian Ocean Territory', 'code' => 'IO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Brunei Darussalam', 'code' => 'BN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Bulgaria', 'code' => 'BG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Burkina Faso', 'code' => 'BF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Burundi', 'code' => 'BI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cambodia', 'code' => 'KH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cameroon', 'code' => 'CM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Canada', 'code' => 'CA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cape Verde', 'code' => 'CV', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cayman Islands', 'code' => 'KY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Central African Republic', 'code' => 'CF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Chad', 'code' => 'TD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Chile', 'code' => 'CL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'China', 'code' => 'CN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Christmas Island', 'code' => 'CX', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cocos (Keeling) Islands', 'code' => 'CC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Colombia', 'code' => 'CO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Comoros', 'code' => 'KM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Congo', 'code' => 'CG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Congo, the Democratic Republic of the', 'code' => 'CD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cook Islands', 'code' => 'CK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Costa Rica', 'code' => 'CR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Côte d\'Ivoire', 'code' => 'CI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Croatia', 'code' => 'HR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cuba', 'code' => 'CU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Curaçao', 'code' => 'CW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Cyprus', 'code' => 'CY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Czech Republic', 'code' => 'CZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Denmark', 'code' => 'DK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Djibouti', 'code' => 'DJ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Dominica', 'code' => 'DM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Dominican Republic', 'code' => 'DO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Ecuador', 'code' => 'EC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Egypt', 'code' => 'EG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'El Salvador', 'code' => 'SV', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Equatorial Guinea', 'code' => 'GQ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Eritrea', 'code' => 'ER', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Estonia', 'code' => 'EE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Ethiopia', 'code' => 'ET', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Falkland Islands (Malvinas)', 'code' => 'FK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Faroe Islands', 'code' => 'FO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Fiji', 'code' => 'FJ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Finland', 'code' => 'FI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'France', 'code' => 'FR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'French Guiana', 'code' => 'GF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'French Polynesia', 'code' => 'PF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'French Southern Territories', 'code' => 'TF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Gabon', 'code' => 'GA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Gambia', 'code' => 'GM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Georgia', 'code' => 'GE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Germany', 'code' => 'DE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Ghana', 'code' => 'GH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Gibraltar', 'code' => 'GI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Greece', 'code' => 'GR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Greenland', 'code' => 'GL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Grenada', 'code' => 'GD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guadeloupe', 'code' => 'GP', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guam', 'code' => 'GU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guatemala', 'code' => 'GT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guernsey', 'code' => 'GG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guinea', 'code' => 'GN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guinea-Bissau', 'code' => 'GW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Guyana', 'code' => 'GY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Haiti', 'code' => 'HT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Heard Island and McDonald Mcdonald Islands', 'code' => 'HM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Holy See (Vatican City State)', 'code' => 'VA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Honduras', 'code' => 'HN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Hong Kong', 'code' => 'HK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Hungary', 'code' => 'HU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Iceland', 'code' => 'IS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'India', 'code' => 'IN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Indonesia', 'code' => 'ID', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Iran, Islamic Republic of', 'code' => 'IR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Iraq', 'code' => 'IQ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Ireland', 'code' => 'IE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Isle of Man', 'code' => 'IM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Israel', 'code' => 'IL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Italy', 'code' => 'IT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Jamaica', 'code' => 'JM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Japan', 'code' => 'JP', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Jersey', 'code' => 'JE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Jordan', 'code' => 'JO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Kazakhstan', 'code' => 'KZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Kenya', 'code' => 'KE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Kiribati', 'code' => 'KI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Korea, Democratic People\'s Republic of', 'code' => 'KP', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Korea, Republic of', 'code' => 'KR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Kuwait', 'code' => 'KW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Kyrgyzstan', 'code' => 'KG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Lao People\'s Democratic Republic', 'code' => 'LA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Latvia', 'code' => 'LV', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Lebanon', 'code' => 'LB', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Lesotho', 'code' => 'LS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Liberia', 'code' => 'LR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Libya', 'code' => 'LY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Liechtenstein', 'code' => 'LI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Lithuania', 'code' => 'LT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Luxembourg', 'code' => 'LU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Macao', 'code' => 'MO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Madagascar', 'code' => 'MG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Malawi', 'code' => 'MW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Malaysia', 'code' => 'MY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Maldives', 'code' => 'MV', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mali', 'code' => 'ML', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Malta', 'code' => 'MT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Marshall Islands', 'code' => 'MH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Martinique', 'code' => 'MQ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mauritania', 'code' => 'MR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mauritius', 'code' => 'MU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mayotte', 'code' => 'YT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mexico', 'code' => 'MX', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Micronesia, Federated States of', 'code' => 'FM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Moldova, Republic of', 'code' => 'MD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Monaco', 'code' => 'MC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mongolia', 'code' => 'MN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Montenegro', 'code' => 'ME', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Montserrat', 'code' => 'MS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Morocco', 'code' => 'MA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Mozambique', 'code' => 'MZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Myanmar', 'code' => 'MM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Namibia', 'code' => 'NA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Nauru', 'code' => 'NR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Nepal', 'code' => 'NP', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Netherlands', 'code' => 'NL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'New Caledonia', 'code' => 'NC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'New Zealand', 'code' => 'NZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Nicaragua', 'code' => 'NI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Niger', 'code' => 'NE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Nigeria', 'code' => 'NG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Niue', 'code' => 'NU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Norfolk Island', 'code' => 'NF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Northern Mariana Islands', 'code' => 'MP', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Norway', 'code' => 'NO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Oman', 'code' => 'OM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Pakistan', 'code' => 'PK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Palau', 'code' => 'PW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Palestine, State of', 'code' => 'PS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Panama', 'code' => 'PA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Papua New Guinea', 'code' => 'PG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Paraguay', 'code' => 'PY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Peru', 'code' => 'PE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Philippines', 'code' => 'PH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Pitcairn', 'code' => 'PN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Poland', 'code' => 'PL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Portugal', 'code' => 'PT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Puerto Rico', 'code' => 'PR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Qatar', 'code' => 'QA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Réunion', 'code' => 'RE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Romania', 'code' => 'RO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Russian Federation', 'code' => 'RU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Rwanda', 'code' => 'RW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Barthélemy', 'code' => 'BL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Kitts and Nevis', 'code' => 'KN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Lucia', 'code' => 'LC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Martin (French part)', 'code' => 'MF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Pierre and Miquelon', 'code' => 'PM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saint Vincent and the Grenadines', 'code' => 'VC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Samoa', 'code' => 'WS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'San Marino', 'code' => 'SM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Sao Tome and Principe', 'code' => 'ST', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Saudi Arabia', 'code' => 'SA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Senegal', 'code' => 'SN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Serbia', 'code' => 'RS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Seychelles', 'code' => 'SC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Sierra Leone', 'code' => 'SL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Singapore', 'code' => 'SG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Sint Maarten (Dutch part)', 'code' => 'SX', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Slovakia', 'code' => 'SK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Slovenia', 'code' => 'SI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Solomon Islands', 'code' => 'SB', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Somalia', 'code' => 'SO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'South Africa', 'code' => 'ZA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'South Sudan', 'code' => 'SS', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Spain', 'code' => 'ES', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Sri Lanka', 'code' => 'LK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Sudan', 'code' => 'SD', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Suriname', 'code' => 'SR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Svalbard and Jan Mayen', 'code' => 'SJ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Swaziland', 'code' => 'SZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Sweden', 'code' => 'SE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Switzerland', 'code' => 'CH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Syrian Arab Republic', 'code' => 'SY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Taiwan', 'code' => 'TW', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Tajikistan', 'code' => 'TJ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Tanzania, United Republic of', 'code' => 'TZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Thailand', 'code' => 'TH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Timor-Leste', 'code' => 'TL', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Togo', 'code' => 'TG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Tokelau', 'code' => 'TK', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Tonga', 'code' => 'TO', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Trinidad and Tobago', 'code' => 'TT', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Tunisia', 'code' => 'TN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Turkey', 'code' => 'TR', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Turkmenistan', 'code' => 'TM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Turks and Caicos Islands', 'code' => 'TC', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Tuvalu', 'code' => 'TV', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Uganda', 'code' => 'UG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Ukraine', 'code' => 'UA', 'status' => CountryStatus::Inactive->value],
            ['name' => 'United Arab Emirates', 'code' => 'AE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'United Kingdom', 'code' => 'GB', 'status' => CountryStatus::Inactive->value],
            ['name' => 'United States', 'code' => 'US', 'status' => CountryStatus::Inactive->value],
            ['name' => 'United States Minor Outlying Islands', 'code' => 'UM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Uruguay', 'code' => 'UY', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Uzbekistan', 'code' => 'UZ', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Vanuatu', 'code' => 'VU', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Venezuela, Bolivarian Republic of', 'code' => 'VE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Viet Nam', 'code' => 'VN', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Virgin Islands, British', 'code' => 'VG', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Virgin Islands, U.S.', 'code' => 'VI', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Wallis and Futuna', 'code' => 'WF', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Western Sahara', 'code' => 'EH', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Yemen', 'code' => 'YE', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Zambia', 'code' => 'ZM', 'status' => CountryStatus::Inactive->value],
            ['name' => 'Zimbabwe', 'code' => 'ZW', 'status' => CountryStatus::Inactive->value],
        ];

        foreach ($countries as $key => $value) {

            Country::create($value);

        }

    }

}
<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class TextCampaignSettingsEnum extends Enum
{
    const EXCLUDE_PAUSED_COMPETING_ADS = 'EXCLUDE_PAUSED_COMPETING_ADS';
    const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    const ENABLE_RELATED_KEYWORDS = 'ENABLE_RELATED_KEYWORDS';
    const ENABLE_EXTENDED_AD_TITLE = 'ENABLE_EXTENDED_AD_TITLE';
    const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
}
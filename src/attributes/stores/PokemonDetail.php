<?php

namespace attributes\stores;

use Attribute;
use models\PokemonEntryType;
use putyourlightson\spark\models\StoreModel;

#[Attribute]
class PokemonDetail extends StoreModel
{
    /** @var ?PokemonEntryType The pokemon entry type data for `entries/save-entry */
    public ?PokemonEntryType $pokemonEntry;
    /** @var bool Whether we are editing the Pokemon */
    public ?bool $editing = false;
}

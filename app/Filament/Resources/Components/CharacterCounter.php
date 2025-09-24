<?php

namespace App\Filament\Resources\Components;

use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CharacterCounter
{
    public static function textInput(string $name, int $maxLength = 60): TextInput
    {
        return TextInput::make($name)
            ->maxLength($maxLength)
            ->live(onBlur: true)
            ->extraInputAttributes([
                'x-data' => "{ maxLength: $maxLength }",
                'x-on:input' => "currentLength = \$event.target.value.length; remaining = maxLength - currentLength;",
                'x-init' => "currentLength = \$el.value.length; remaining = maxLength - currentLength;",
            ])
            ->suffixAction(
                Action::make('character-count')
                    ->label(fn ($state) => strlen($state ?? '') . "/$maxLength")
                    ->disabled()
                    ->extraAttributes([
                        'class' => 'character-counter',
                        'style' => 'color: #6b7280; font-size: 0.75rem;'
                    ])
            );
    }

    public static function textarea(string $name, int $maxLength = 160): Textarea
    {
        return Textarea::make($name)
            ->maxLength($maxLength)
            ->live(onBlur: true)
            ->helperText(fn ($state) => 'Ký tự: ' . strlen($state ?? '') . "/$maxLength");
    }
}

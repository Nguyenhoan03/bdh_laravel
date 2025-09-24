@props(['field', 'maxLength', 'currentLength' => 0])

<div class="character-counter-wrapper" x-data="{ 
    currentLength: {{ $currentLength }}, 
    maxLength: {{ $maxLength }},
    get remaining() { return this.maxLength - this.currentLength; },
    get isWarning() { return this.remaining <= 10 && this.remaining > 0; },
    get isDanger() { return this.remaining <= 0; },
    get colorClass() { 
        if (this.isDanger) return 'danger';
        if (this.isWarning) return 'warning';
        return '';
    }
}">
    <div class="character-counter" 
         :class="colorClass"
         x-text="`${currentLength}/${maxLength}`">
    </div>
</div>

<style>
.character-counter-wrapper {
    position: relative;
}

.character-counter {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 0.75rem;
    color: #6b7280;
    background: white;
    padding: 2px 6px;
    border-radius: 4px;
    border: 1px solid #e5e7eb;
    z-index: 10;
}

.character-counter.warning {
    color: #f59e0b;
    border-color: #f59e0b;
}

.character-counter.danger {
    color: #ef4444;
    border-color: #ef4444;
    background: #fef2f2;
}
</style>

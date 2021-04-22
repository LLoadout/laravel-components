<div
    x-data="signPad()"
    x-init="draw(@this.width,@this.height,@this.background,@this.color)"
    style="position: relative;height: {{ $height + 30}}px; width:{{ $width }}px"
>
    <button x-on:click="clear()" style="display: inline-block;position: relative;top: 35px;left:5px; z-index: 100;background: #ff6961; padding:4px;border-radius:4px">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 20px; color:white">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
        </svg>
    </button>

    <input type="hidden" name="{{ $name }}" x-bind:value="jpeg"/>
</div>
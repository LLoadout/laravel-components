function signPad() {
    return {
        signature: '',
        jpeg: '',
        draw(width = 500, height = 400, background = 'white', color = 'black') {
            var canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            canvas.style.zIndex = 8;
            canvas.style.background = background;
            canvas.style.position = "absolute";
            canvas.style.border = "1px solid #C0C0C0";
            canvas.position = "relative";

            this.signature = new SignaturePad(canvas);
            this.signature.minWidth = 2;
            this.signature.maxWidth = 2;
            this.signature.penColor = color;
            this.signature.onEnd = () => this.save();

            this.$el.appendChild(canvas);
        },
        save() {
            this.jpeg = this.signature.toDataURL("image/png");
        },
        clear() {
            this.signature.clear();
        }
    }
}

import { Controller } from "@hotwired/stimulus"

export default class extends Controller {

    static targets = ["input"];

    setValue(event) {
        event.preventDefault();
        const value = event.currentTarget.dataset.value;
        this.inputTarget.value = value;
        this.inputTarget.dispatchEvent(new Event('change', { bubbles: true }));
    }
}
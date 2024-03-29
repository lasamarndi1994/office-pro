
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const $toast = ($message) => {
    toast($message, {
        "theme": "dark",
        "type": "info",
        "dangerouslyHTMLString": true,
        "autoClose": 800,
        "transition": "zoom",
        "position": "bottom-center",

    })
};

export default $toast;
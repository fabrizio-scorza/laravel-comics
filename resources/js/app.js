// importiamo tramite alias il foglio di stile
import '~resources/scss/app.scss';

// importiamo bootstrap nel js
import * as bootstrap from "bootstrap";

// serve per processare i percorsi delle immagini nella cartella resources e renderle publiche
import.meta.glob(["../img/**"]);

import './bootstrap';

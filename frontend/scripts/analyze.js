const utils = {
	tesseract: (image) => {
		const T = require('tesseract.js');
        const fs = require("fs");

        T.recognize(image, 'rus', {logger: e => console.log(e)})
        .then(out => {
        console.log(out.data.text)
        /*fs.writeFileSync("./frontend/scripts/text.js", JSON.stringify(out, null, "\t"))*/
        return out.data.text
    })
	}
};

module.exports = utils;
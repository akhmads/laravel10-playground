import "./bootstrap";
import EditorJS from "@editorjs/editorjs";

if (document.getElementById("editorjs")) {
    const editor = new EditorJS({
        holder: "editorjs",
        placeholder: "Let`s write an awesome story!",
        onReady: function () {},
        onChange: function () {
            editorChange();
        },
    });
}

// try {
//     await editor.isReady;
//     editor.render({
//         time: 1552744582955,
//         blocks: [
//             {
//                 type: "paragraph",
//                 data: {
//                     text: "Lets make someting greats",
//                 },
//             },
//         ],
//     });
// } catch (reason) {
//     console.log(`Editor.js initialization failed because of ${reason}`);
// }

try {
    await editor.isReady;
    var editorContent = document.getElementById("editorContent");
    if (editorContent != null) {
        if (editorContent.value != "") {
            editor.render(JSON.parse(editorContent.value));
        }
    }
} catch (reason) {
    // console.log(`Editor.js initialization failed because of ${reason}`);
}

function editorChange() {
    var editorContent = document.getElementById("editorContent");
    if (editorContent != null) {
        editor
            .save()
            .then((savedData) => {
                editorContent.value = JSON.stringify(savedData);
            })
            .catch((error) => {
                console.log("editor.js error : ", error);
            });
    }
}

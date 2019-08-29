let form = document.getElementById('form'); 
let task = document.getElementById('task');
let finish = document.getElementById("finish");

function onClick(checkbox,child) {
    checkbox.addEventListener("click",(event) => {
        child.children[1].style.color = 'red';
        finish.prepend(child);
        sendData({
            input:child.children[1].innerText,
            checked:checkbox.checked
        });
    })
}

// Fonction pour envoyer les données de l'input
function sendData(data) {
    let formData = new FormData();
    //append pousse les donneés dans le formulaire avec un nom
    formData.append("input",data.input);
    formData.append('checked',data.checked)
    //Récupère les données d'une page ( ici formulaire.php )
    fetch("formulaire.php", {
        method:'POST',
        body:formData
    }).then(res => res.text()).then(data => console.log(data)).catch(err => console.log(err));
    console.log(data);
}

form.addEventListener('submit',(event) => {
    event.preventDefault();

    let input = event.target.children[0].value;
    let p = document.createElement("span");
    let checkbox = document.createElement("input");
    let content = document.createElement("div");


    event.target.children[0].value = '';

    p.style.color = "black";
    checkbox.type = "checkbox";
    onClick(checkbox,content);

    p.innerText = input;
    content.appendChild(checkbox);
    content.appendChild(p);
    task.prepend(content);

    sendData({
        input:p.innerText,
        checked:checkbox.checked
    });
})
let btn = document.getElementById("btnhide");
btn.style.display = 'none';

if(input.task_inputs == '') {
    console.log("MET QUELQUE CHOSE")
}
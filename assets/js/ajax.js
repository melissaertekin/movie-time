document.querySelector('button')
    .addEventListener('click', async () => {
        console.log('avant la requete')
        try {
            const response = await fetch(
                'http://localhost:8000/assets/php/server.php')
            const data = await response.json()
            let begin = "User :  ";
            let id = "\n User id = ";
            let name = "\n Username = ";
            let mail = " \n Mail = ";
            let password = "\n  User password = ";
            let admin = "\n Admin value =  ";
            for (let i = data.users.length -1; i >= 0; i--){
                const paragraph = document.createElement('p')
                paragraph.innerText = begin.concat(id,(data.users[i]['id'].valueOf().toString()),name,data.users[i]['username'].valueOf(),mail,data.users[i]['email'].valueOf(),password,data.users[i]['password'].valueOf(),admin,data.users[i]['admin_val'].valueOf());
                paragraph.style.display = 'block'
                const section = document.querySelector('section')
                section.insertAdjacentElement('afterbegin', paragraph)
            }
        } catch (error) {
            console.log(error)
        }
        console.log('après la requete')
    })


function addElement(value) {
    const paragraph = document.createElement('p')
    paragraph.innerText = value.valueOf();
    paragraph.style.display = 'block'

    const section = document.querySelector('section')
    section.insertAdjacentElement('afterbegin', paragraph)
}

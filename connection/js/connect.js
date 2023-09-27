const email = document.querySelector('form input')
const verifEmail = function () {
    if (!/^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,}$/.test(email.value)) {
        email.classList.add('error')
    } else {
        email.classList.remove('error')
    }
}
email.addEventListener('input', verifEmail)

document.getElementById('register')
    ?.addEventListener('submit', function (event) {
        event.preventDefault()
        const errors = false
        const password = document.querySelector('form input:first-of-type')
        const emailValue = email.value

        verifEmail()

        if (!errors) {
            this.submit()
        } else {
            // const errorP = document.querySelector('section p')
            // errorP.innerText = 'Votre formulaire contient une erreur'
            // errorP.style.display = 'block'

            const paragraph = document.createElement('p')
            paragraph.innerText = 'Votre formulaire contient une erreur'
            paragraph.style.display = 'block'

            const section = document.querySelector('section')
            section.insertAdjacentElement('afterbegin', paragraph)
        }
    })
/*
// to see the password
document.getElementById('see_password')
    .addEventListener('click', () => {
        const password = document.getElementById('password');
        password.type = password.type === 'text' ? 'password' : 'text';
    });
*/
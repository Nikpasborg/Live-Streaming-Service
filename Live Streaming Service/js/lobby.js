let avatar

let form = document.getElementById('lobby__form')

let displayName = sessionStorage.getItem('display_name')
if(displayName){
    form.name.value = displayName
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
    if (!avatar){
        alert('You must select an avatar before joining a room!')
        return
    }

    sessionStorage.setItem('display_name', e.target.name.value)

    let inviteCode = e.target.room.value
    if(!inviteCode){
        inviteCode = String(Math.floor(Math.random() * 10000))
    }
    window.location = `room.html?room=${inviteCode}`
})
//
let avatarOptions = document.getElementsByClassName('avatar_option')

for (let i = 0; avatarOptions.length > i; i++){
    avatarOptions[i].addEventListener('click', (e) => {
        
        for(let i = 0; avatarOptions.length > i; i++){
            avatarOptions[i].classList.remove('avatar_option_selected')
        }

        e.target.classList.add('avatar_option_selected')
        avatar = e.target.src
        sessionStorage.setItem('avatar', avatar)
    })
}


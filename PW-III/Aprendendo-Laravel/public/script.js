const button = document.querySelector("#cadastro")
const button2 = document.querySelector("#login")
const modal = document.querySelector("#modal")
const modal2 = document.querySelector("#modal2")
const buttonClose = document.querySelector("#ok")
const buttonClose2 = document.querySelector("#ok2")
button.onclick = function(){
    modal.showModal()
}
buttonClose.onclick = function(){
    modal.close()
}

button2.onclick = function(){
    modal2.showModal()
}
buttonClose2.onclick = function(){
    modal2.close()
}
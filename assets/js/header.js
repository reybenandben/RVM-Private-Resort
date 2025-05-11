
const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry) =>{
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        }else{
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden,.hidden2')
hiddenElements.forEach((el) => observer.observe(el));



function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}

var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
loader.style.display = "none";
})

    document.addEventListener('DOMContentLoaded', () => {
        const textbox = document.querySelector('.textbox');
        
        textbox.addEventListener('input', () => {
            if (textbox.value === 'rvm2286') {
                window.location.href = '../login.php';
            }
        });
    });



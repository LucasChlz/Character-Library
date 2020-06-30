var btn = document.getElementById('btn');

const toggleSide = () => {
    document.getElementById("sidebar").classList.toggle('active');
}

btn.addEventListener('click',toggleSide);
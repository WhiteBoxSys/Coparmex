const images = document.querySelectorAll("img");

function intersection(entries,observer){
    entries.forEach(entry => {
        if (entry.isIntersecting){
            if(entry.target.classList.contains("logo")){
                console.log("logo")
            }else{
                entry.target.src = entry.target.dataset.src;
            }
            observer.unobserve(entry.target);
        }
    })
}
        

const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0
}

const observer = new IntersectionObserver(intersection, options)
images.forEach(img => {
    observer.observe(img);
});
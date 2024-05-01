//the sliding photos don't work here, why?
//containers
const itemContainers = [...document.querySelectorAll('.item-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];
const itemCard = document.querySelector(".item-card")

itemContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width +40 ;
    let itemCardWidth = itemCard.getBoundingClientRect().width + 40;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
        console.log(containerWidth)
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
        console.log(containerWidth)
    })

    // auto slide images
    let autoSlider = setInterval(() => {
        item.scrollLeft += itemCardWidth;;
        console.log(containerWidth)
        console.log(item.scrollLeft)
        if (item.scrollLeft >= containerWidth / 1.3) {
            item.scrollLeft = 0
        }
    }, 5000)
})
//hide and seek
function toggleText1(id) {
    var text = document.getElementById(id);
    if (text.style.display === "none" || text.style.display === "") {
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}
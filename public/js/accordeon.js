const accrodHeaders = document.querySelectorAll(".accord-header");
accrodHeaders.forEach((ach) => {
  ach.addEventListener("click", toggelItem, false);
});

function toggelItem() {
  const currentContentEle = this.nextElementSibling;

  const isCollapsed = currentContentEle.classList.contains("collapse");

  accrodHeaders.forEach((ach) => {
    const contentEle = ach.nextElementSibling;
    if (!contentEle.classList.contains("collapse")) {
      contentEle.classList.add("collapse");
    }
  });

  if (isCollapsed) {
    currentContentEle.classList.remove("collapse");
  }
}

let listElements = document.querySelectorAll('.link');

listElements.forEach(listElement =>{
  listElement.addEventListener('click', () => {
    if (listElement.classList.contains('active')){
        listElement.classList.remove('active');
    }else{
        listElements.forEach(listE => {
          listE.classList.remove('active');
        })
        listElement.classList.toggle('active');
    }
  })
})

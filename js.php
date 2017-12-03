const baseURL = "http://10.0.0.180/muse/";

const checkReferrer = () => {
    //console.log("History length is: " + window.history.length);
    if(window.location.href !== baseURL && document.referrer == ""){
          console.log("This comes from a refresh");
          let actualurl = window.location.href;
          console.log(actualurl);
          let url =  actualurl + ".php";
          getPage(url);
          

    } else {
        console.log("Referrer is: " + document.referrer);  
    }
}



window.onpopstate = (e) => {
    console.log("location: " + document.location + ", state: " + JSON.stringify(e.state));
    let url = window.location.href + ".php";
    getPage(url);

}

//cache all anchors with class of alula
const links = document.body.querySelectorAll('a.alula');
//add event listener to each link
let addEventListenerList = (list, event, fn) => {
    for(var i=0, len = list.length; i < len; i++){
        list[i].addEventListener(event, fn, false);
    }
}

const alulaClicked = (e) => {
    e.preventDefault();
    const that = this;
    console.log("This button has been clicked. Double Check.", e.srcElement.href, e.srcElement, e.srcElement.textContent);
    let actualurl = window.location.href;
    let url = e.srcElement.href;
    let prepurl = url.slice(0, -4);
    let title = e.srcElement.textContent;
    getPage(url);
    stateAdjust(prepurl, title);
    console.log("prepurl is ", prepurl);
}

const stateAdjust = (prepurl, title) => {
    history.pushState("pushedState", title, prepurl );
    document.title = title;
}

const getPage = (url) => {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onload = function(){
        //console.log(this.responseText);
        let pageData = this.responseText;
        document.getElementById('main').innerHTML = this.responseText;
    }

    xhr.send();
}

window.onload = () => {
    addEventListenerList(links, 'click', alulaClicked);
    checkReferrer();
}

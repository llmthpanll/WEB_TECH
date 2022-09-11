let requestURL = 'movies.json';
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        ExtractData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();

function ExtractData(data) {
    document.write(`<h1 style="display:flex;justify-content:center;margin-top:2%;font-size:40px">→ Movie Showing ←</h1>`)
    document.write(`<body><div style="display:flex;justify-content:center;align-items:center;margin-top:1%">`)
    for (let i = 0; i < data.movies.showing.length; i++) {
        document.write(`<div style="margin:40px 10px;border: 2px solid #eee;padding: 0px 20px 15px 20px;border-radius: 5px;position:relative;min-width:170px">\
        <img src="${data.movies.showing[i].poster}" style="width:150px;position:absolute;top:-10%;left:14%;border-radius:2px">\
        <div style="width:150px;height:200px;margin-bottom:10px;"></div>\
        <div style="display:flex;justify-content:center"><h5 style="margin:0px">${data.movies.showing[i].title_th}</h5></div>\
        <div style="display:flex;justify-content:center;font-size:12px"><p>Release date : ${data.movies.showing[i].releasedate}</p></div>\
        <button type="button" style="margin-left:10px;padding:5px 34px;background-color:#007bff;color:white;border-radius:5px;border: 0px;font-size:12px">เช็ครอบภาพยนต์</button></div>`)
    }
    document.write("</div></body>")
    document.write(`<h1 style="display:flex;justify-content:center;margin-top:2%;font-size:40px">→ Coming Soon ←</h1>`)
    document.write(`<body><div style="display:flex;justify-content:center;align-items:center;margin-top:1%">`)
    for (let i = 0; i < data.movies.comingsoon.length; i++) {
        document.write(`<div style="margin:40px 10px;border: 2px solid #eee;padding: 0px 20px 15px 20px;border-radius: 5px;position:relative;min-width:170px">\
        <img src="${data.movies.comingsoon[i].poster}" style="width:150px;position:absolute;top:-10%;left:14%;border-radius:2px">\
        <div style="width:150px;height:200px;margin-bottom:10px;"></div>\
        <div style="display:flex;justify-content:center"><h5 style="margin:0px">${data.movies.comingsoon[i].title_th}</h5></div>\
        <div style="display:flex;justify-content:center;font-size:12px"><p>Release date : ${data.movies.comingsoon[i].releasedate}</p></div>\
        <button type="button" style="margin-left:10px;padding:5px 34px;background-color:#007bff;color:white;border-radius:5px;border: 0px;font-size:12px">เช็ครอบภาพยนต์</button></div>`)
    }
    document.write("</div></body>")
}
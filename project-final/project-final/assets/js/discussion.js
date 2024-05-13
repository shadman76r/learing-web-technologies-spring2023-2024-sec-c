function reply(id, name) {
    title = document.getElementById('title');
    title.innerHTML = "Reply to " + name;
    document.getElementById('reply_id').value = id;
}

function postComment() {
    let name = document.getElementById('name').value;
    let comment = document.getElementById('comment').value;
    let reply_id = document.getElementById('reply_id').value;

    // let post = {
    //     name: name,
    //     comment: comment,
    //     reply_id: reply_id
    // };

    // let data = JSON.stringify(post);

    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../controllers/discussionController.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    console.log("on state change");
    console.log("sending data");
    // xhttp.send(data);
    xhttp.send(`name=${name}&comment=${comment}&reply_id=${reply_id}`);

    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            window.location.reload();
            alert(this.responseText);
        }
    }
}
window.addEventListener('load', () => {
    at_do_like();
});


function ad_body(ad_id) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            window.location.href = 'single-post.php?ad_id=' + ad_id;
        }
    }
    var f = new FormData();
    f.append('ad_id', ad_id);
    r.open("POST", "ad_click_count.php", true);
    r.send(f);
}

function bdg_body(ad_id) {
    window.location.href = 'makebadge.php?ad_id=' + ad_id;
}

function admin_user_prof(uid) {
    window.location.href = 'admin_user_prof.php?uid=' + uid;
}

function admin_message_body() {
    window.location.href = 'admin_message_body.php?id=6';
}

function user_create_ad() {
    window.location.href = 'user_create_ad.php';
}

function user_log_first() {
    window.location.href = 'signin.php?sg=1';
}

function send_msg() {
    var msg_name = document.getElementById('msg_name').value;
    var msg_contact = document.getElementById('msg_contact').value;

    var radioButtons = document.getElementsByName('flexRadioDefault');

    var selectedValue;

    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            selectedValue = radioButtons[i].value;
            break;
        }
    }

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            alert(t);
            if (t == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('msg_name', msg_name);
    f.append('msg_contact', msg_contact);
    f.append('type', selectedValue);
    r.open("POST", "msg_process.php", true);
    r.send(f);

}

function log_process() {
    let lg_uname = document.getElementById('lg_uname').value;
    let lg_pass = document.getElementById('lg_pass').value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            if (t == '1') {
                window.location.href = 'adadmin.php';
            } else if (t == '2') {
                window.location.href = 'index.php';
            } else {
                alert(t);
            }
        }
    }
    var f = new FormData();
    f.append('lg_uname', lg_uname);
    f.append('lg_pass', lg_pass);
    r.open("POST", "lg_process.php", true);
    r.send(f);
}

function admin_usr_updt(uid) {
    let up_uname = document.getElementById('up_uname').value;
    let up_contact = document.getElementById('up_contact').value;
    let up_age = document.getElementById('up_age').value;
    let up_pass = document.getElementById('up_pass').value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            alert(t);
        }
    }
    var f = new FormData();
    f.append('uid', uid);
    f.append('up_uname', up_uname);
    f.append('up_contact', up_contact);
    f.append('up_age', up_age);
    f.append('up_pass', up_pass);
    r.open("POST", "admin_usr_updt_process.php", true);
    r.send(f);
}

function user_setup(ad_id) {
    let usr_badge = document.getElementById('usr_badge').value;
    let usr_stat = document.getElementById('usr_stat').value;
    let usr_cashback = document.getElementById('usr_cashback').value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            if (t == 'success') {
                alert(t);
                location.reload();
            }

        }
    }
    var f = new FormData();
    f.append('usr_badge', usr_badge);
    f.append('usr_stat', usr_stat);
    f.append('usr_cashback', usr_cashback);
    f.append('ad_id', ad_id);
    r.open("POST", "user_setup_process.php", true);
    r.send(f);
}

function lg_out() {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            if (t == 'success') {
                window.location.href = 'index.php';
            }
        }
    }
    r.open("POST", "lg_out_process.php", true);
    r.send();
}

function post_ad() {
    let ad_img_1 = document.getElementById('ad_img_1');
    let ad_img_2 = document.getElementById('ad_img_2');
    let ad_img_3 = document.getElementById('ad_img_3');
    let ad_img_4 = document.getElementById('ad_img_4');
    let ad_title = document.getElementById('ad_title');
    let ad_mobile = document.getElementById('ad_mobile');
    let ad_description = document.getElementById('ad_description');
    let ad_location = document.getElementById('ad_location');
    let ad_category = document.getElementById('ad_category');

    if (ad_img_1.files.length == 0) {
        alert('Pleace select image 1')
    } else if (ad_img_1.files.length == 1) {
        var file1 = ad_img_1.files[0];
        // alert('okk');
    } else if (ad_img_1.files.length > 1) {
        alert('select only one image in image 1');
    }
    if (ad_img_2.files.length == 1) {
        var file2 = ad_img_2.files[0];
        // alert('okk');
    } else if (ad_img_3.files.length > 1) {
        alert('select only one image in image 2');
    }
    if (ad_img_3.files.length == 1) {
        var file3 = ad_img_3.files[0];
        // alert('okk');
    } else if (ad_img_3.files.length > 1) {
        alert('select only one image in image 3');
    }
    if (ad_img_4.files.length == 1) {
        var file4 = ad_img_4.files[0];
        // alert('okk');
    } else if (ad_img_4.files.length > 1) {
        alert('select only one image in image 4');
    }

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            alert(t);
            if (t == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('file1', file1);
    if (file2 != null) {
        f.append('file2', file2);
    }
    if (file3 != null) {
        f.append('file3', file3);
    }
    if (file4 != null) {
        f.append('file4', file4);
    }
    f.append('ad_title', ad_title.value);
    f.append('ad_mobile', ad_mobile.value);
    f.append('ad_description', ad_description.value);
    f.append('ad_location', ad_location.value);
    f.append('ad_category', ad_category.value);
    r.open("POST", "post_ad_process.php", true);
    r.send(f);
}

function update_ad(ad_id) {
    let ad_img_1 = document.getElementById('ad_img_1');
    let ad_img_2 = document.getElementById('ad_img_2');
    let ad_img_3 = document.getElementById('ad_img_3');
    let ad_img_4 = document.getElementById('ad_img_4');
    let ad_title = document.getElementById('ad_title');
    let ad_mobile = document.getElementById('ad_mobile');
    let ad_description = document.getElementById('ad_description');
    let ad_location = document.getElementById('ad_location');
    let ad_category = document.getElementById('ad_category');

    if (ad_img_1.files.length == 1) {
        var file1 = ad_img_1.files[0];
        // alert('okk');
    } else if (ad_img_1.files.length > 1) {
        alert('select only one image in image 1');
    }
    if (ad_img_2.files.length == 1) {
        var file2 = ad_img_2.files[0];
        // alert('okk');
    } else if (ad_img_3.files.length > 1) {
        alert('select only one image in image 2');
    }
    if (ad_img_3.files.length == 1) {
        var file3 = ad_img_3.files[0];
        // alert('okk');
    } else if (ad_img_3.files.length > 1) {
        alert('select only one image in image 3');
    }
    if (ad_img_4.files.length == 1) {
        var file4 = ad_img_4.files[0];
        // alert('okk');
    } else if (ad_img_4.files.length > 1) {
        alert('select only one image in image 4');
    }

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            alert(t);
            if (t == 'success') {
                window.location.href = 'adadmin.php';
            }
        }
    }
    var f = new FormData();
    f.append('file1', file1);
    if (file2 != null) {
        f.append('file2', file2);
    }
    if (file3 != null) {
        f.append('file3', file3);
    }
    if (file4 != null) {
        f.append('file4', file4);
    }
    f.append('ad_id', ad_id);
    f.append('ad_title', ad_title.value);
    f.append('ad_mobile', ad_mobile.value);
    f.append('ad_description', ad_description.value);
    f.append('ad_location', ad_location.value);
    f.append('ad_category', ad_category.value);
    r.open("POST", "update_ad_process.php", true);
    r.send(f);
}

function rg_user() {
    let rg_uname = document.getElementById('rg_uname');
    let rg_contact = document.getElementById('rg_contact');
    let rg_age = document.getElementById('rg_age');
    let rg_pass = document.getElementById('rg_pass');
    let rg_conf_pass = document.getElementById('rg_conf_pass');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            alert(t);
            if (t == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('rg_uname', rg_uname.value);
    f.append('rg_contact', rg_contact.value);
    f.append('rg_age', rg_age.value);
    f.append('rg_pass', rg_pass.value);
    f.append('rg_conf_pass', rg_conf_pass.value);
    r.open("POST", "rg_process.php", true);
    r.send(f);
}

function delete_ad(ad_id) {

    var isConfirmed = window.confirm('Are you sure you want to proceed?');
    if (isConfirmed) {
        var r = new XMLHttpRequest();
        r.onreadystatechange = function () {
            if (r.readyState == 4 && r.status == 200) {
                console.log(r.responseText);
                let t = r.responseText;
                alert(t);
                if (t == 'success') {
                    location.reload();
                }
            }
        }
        var f = new FormData();
        f.append('ad_id', ad_id);
        r.open("POST", "ad_delete_process.php", true);
        r.send(f);
    }


}

function user_republish(ad_id) {

    var isConfirmed = window.confirm('Are you sure you want to Republish?');
    if (isConfirmed) {
        var r = new XMLHttpRequest();
        r.onreadystatechange = function () {
            if (r.readyState == 4 && r.status == 200) {
                console.log(r.responseText);
                let t = r.responseText;
                alert(t);
            }
        }
        var f = new FormData();
        f.append('ad_id', ad_id);
        r.open("POST", "ad_republish_process.php", true);
        r.send(f);
    }
}


function do_like(ad_id) {

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            alert(t);
        }
    }
    var f = new FormData();
    f.append('ad_id', ad_id);
    r.open("POST", "ad_like_process.php", true);
    r.send(f);
}

function at_do_like() {

    // alert("okk");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            let t = r.responseText;
            // alert(t);
        }
    }
    var f = new FormData();
    r.open("POST", "auto_like.php", true);
    r.send(f);
}

function search_ad_normal() {
    var srch = document.getElementById('srch').value;
    window.location.href = 'index.php?srch=' + srch;
}
const getUrl = () => {
    let param = new URLSearchParams(window.location.search);
    return param.get("n");
};

const searchUrl = (url_name) => {
    let data = {
        url_name: url_name,
    };
    let json = JSON.stringify(data);
    $.ajax({
        url: "backend/core.php",
        method: "POST",
        data: json,
        success: (res) => {
            res ? jump(res[0]["url_dest"]) : displayError();
        },
    });
};


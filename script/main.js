const getUrl = () => {
    let param = new URLSearchParams(window.location.search);
    return param.get("n");
};


var input1 = document.querySelector("#tags");
new Tagify(tags);

const e = document.getElementById("status_color"),
    t = document.getElementById("status"),
    o = ["bg-success", "bg-warning", "bg-danger"];
$(t).on("change", function (t) {
    switch (t.target.value) {
        case "published":
            e.classList.remove(...o), e.classList.add("bg-success");
            break;
        case "scheduled":
            e.classList.remove(...o), e.classList.add("bg-warning");
            break;
        case "inactive":
            e.classList.remove(...o), e.classList.add("bg-danger");
            break;
        case "draft":
            e.classList.remove(...o), e.classList.add("bg-primary");
    }
});

$("#discount_percentage").val('100');
document.getElementById("discount_percentage").classList.remove("d-none");

const ee = document.querySelectorAll('input[name="discount_option"]'),
    tt = document.getElementById("discount_percentage"),
    oo = document.getElementById("discounted_price");
ee.forEach((e) => {
    e.addEventListener("change", (e) => {
        switch (e.target.value) {
            case "1":
                tt.classList.add("d-none"), oo.classList.add("d-none");
                document.getElementById("percentage").value = '';
                document.getElementById("fixed").value = '';
                break;
            case "2":
                tt.classList.remove("d-none"), oo.classList.add("d-none");
                document.getElementById("fixed").value = '';
                break;
            case "3":
                tt.classList.add("d-none"), oo.classList.remove("d-none");
                document.getElementById("percentage").value = '';
                break;
            default:
                tt.classList.add("d-none"), oo.classList.add("d-none");
        }
    });
});

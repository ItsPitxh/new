let number = 1

$(".img-input").on("change", function() {
    const reader = new FileReader();    
    reader.addEventListener("load", () => {
        const uploaded_file = reader.result;
        $(this).siblings("label.display-img").css("backgroundImage", `url(${uploaded_file})`)
        const cloned = $('.toclone').eq(0).clone(true);
        cloned.find('input').val("").attr("id", "id" + number)
        cloned.find('label').attr("for","id" + number).css("backgroundImage", ``)
        $('.cloneto').append(cloned)
        number++
    });
    reader.readAsDataURL(this.files[0])
})

$('.cloneto').contextmenu(function (evt) {
    evt.preventDefault()
    $(this).find('label.display-img').remove()
    $(this).find('input').remove()
})

$(".close").on("click", function () {
   $(".form-modal").trigger("reset")
   $('.cloneto').find('.toclone').remove()
   $(".display-img").css("backgroundImage", ``)
})


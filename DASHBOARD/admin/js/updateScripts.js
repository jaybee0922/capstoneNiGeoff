document.addEventListener('DOMContentLoaded', ()=> {
    const submit = document.querySelector(".update-pass");
    const newPassword = document.querySelector(".newPass")
    const confirmPassword = document.querySelector(".confirm")

    submit.addEventListener("click", async (e) => {
        e.preventDefault();
    
        const formData = new FormData();
        formData.append("new_password", newPassword.value);
        formData.append("confirm_password", confirmPassword.value);

        const res = await fetch("./db_conn/updatePass.php", {
            method: "POST",
            body: formData
        });
    
        const output = await res.json();
        if (output.success) {
            alert(output.message);
            newPassword.value = "";
            confirmPassword.value = "";
            window.location.href = output.redirect;
        } else {
            alert(output.message);
        }
    });
});
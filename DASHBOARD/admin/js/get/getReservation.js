let isChecked = false;

const updateAction = async (id, event) => {
  event.preventDefault();

  const status = document.querySelector('.status');
  const formData = new FormData();
  
  if (status.textContent === "pending") {
    formData.append("status", "booked");
    formData.append("id", id);
  }
  else if (status.textContent === "booked"){
    alert("Status : Already Booked")
  }
  else {
    formData.append("status", status.textContent);
  }

  const res = await fetch("./db_conn/updateReserve.php", {
    method: "POST",
    body: formData
  });
  const output = await res.json();
  if (output.success) {
    alert(output.message);
    window.location.href = output.redirect;
  } else {
    alert(output.message);
  }

}

const getReservations = async () => {
  try {
    const tbody = document.querySelector("#content-container");
    let tr = "";
    const res = await fetch("./db_conn/getReserve.php", {
      method: "GET",
      headers: {
          "Content-Type": "application/json"
      }
    });

    const output = await res.json();
    if (output.empty === "empty") {
        tr = "<tr>Record Not Found</td>"
    } else {
      console.log(output);

      for (let i in output) {
        tr += `
        <tr>
          <td>${parseInt(i) + 1}</td>
          <td>${output[i].guest}</td>
          <td>${output[i].trans_date}</td>
          <td>${output[i].check_in}</td>
          <td>${output[i].check_out}</td>
          <td>${output[i].room_type}</td>
          <td>${output[i].room_qty}</td>
          <td>${output[i].assigned_room}</td>
          <td>
            <div class="action-wrapper">
              <span class="status">${output[i].status}</span>
              <button class="action-confirmation" onClick="updateAction('${output[i].id}', event)">&check;</button>
            </div>
          </td>
        </tr>`
      }
    }
    tbody.innerHTML = tr;
    
    if(output[i].id === "booked"){
      const action = document.querySelector('.action-confirmation');
      action.classList.add('action-disable');
      action.classList.remove('action-confirmation');
    }
  } catch (error) {
    console.log("error " + error)
  }
}
getReservations();
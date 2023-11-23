const getRooms = async () => {
  try {
    const tbody = document.querySelector("#content-container");
    let tr = "";
    const res = await fetch("./db_conn/getRoom.php", {
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
          <td>
            <div class="roomImg-wrap">
              <img src="./db_conn/room-img/${output[i].img}" alt="" class="roomImg">
            </div>
          </td> 
          <td>${output[i].accomodation}</td>
          <td>${output[i].avail_rooms}</td>
          <td>${output[i].room_from}</td>
          <td>${output[i].room_to}</td>
          <td>${output[i].price}</td>
        </tr>`
      }
    }
    tbody.innerHTML = tr;
  } catch (error) {
    console.log("error " + error)
  }
}
getRooms();



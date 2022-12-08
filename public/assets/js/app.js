function xhr_method_click(method) {
  let xhr = new XMLHttpRequest();

  xhr.open(method, "/method");
  xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = () => {
    if (xhr.status != 200) { 
      console.log(`Error ${xhr.status}: ${xhr.statusText}`);
    } else {
      //  window.location.replace("/method/" + method);
      window.location.href = "/method/" + xhr.response;
    }
  };

  xhr.onprogress = (event) => console.log(event.loaded);

  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4) {
      console.log(xhr.responseText);
    }
  };

  xhr.onerror = () => console.log("Request failed");

  xhr.send();
}

function fetch_method_click(method) {
  fetch("/method", {
    method: method,
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
      'Content-Type': 'application/x-www-form-urlencoded'
    }//,
//    body: JSON.stringify({orderId: 1})
  })
  .then(async response => window.location.href = "/method/" + await response.text());
//   .then(response => response.json())
//   .then( json => console.log(json))
//   .catch( error => console.error(error));
}
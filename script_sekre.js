// this source code used updated google sign in options 
// after the previous button is deprecated
window.onload = () => {
  gapiLoaded();
  gisLoaded();

}

var CLIENT_ID = '751669109441-rhrjpn8cma1i9b0ene4jmljnh9tf0mpa.apps.googleusercontent.com';
var API_KEY = 'AIzaSyDYJ1yzO4YdOIwYVusD3Nytr1A2Cb8ntfw';
var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"];
var SCOPES = 'https://www.googleapis.com/auth/drive';
var signinButton = document.getElementsByClassName('signin')[0];
var signoutButton = document.getElementsByClassName('signout')[0];
let tokenClient;
let gapiInited = false;
let gisInited = false;

function gapiLoaded() {
  gapi.load('client', initializeGapiClient);
}

async function initializeGapiClient() {
  await gapi.client.init({
      apiKey: API_KEY,
      discoveryDocs: DISCOVERY_DOCS,
  });
  gapiInited = true;
  maybeEnableButtons();
}

function gisLoaded() {
  tokenClient = google.accounts.oauth2.initTokenClient({
      client_id: CLIENT_ID,
      scope: SCOPES,
      callback: ''
  });
  gisInited = true;
  maybeEnableButtons();
}

function maybeEnableButtons() {
  if (gapiInited && gisInited) {
      signinButton.style.display = 'block'
  }
}

signinButton.onclick = () => handleAuthClick()
function handleAuthClick() {
  tokenClient.callback = async (resp) => {
      if (resp.error !== undefined) {
          throw (resp);
      }
      signinButton.style.display = 'none'
      signoutButton.style.display = 'block'
      checkFolder()
  };

  if (gapi.client.getToken() === null) {
      tokenClient.requestAccessToken({ prompt: 'consent' });
  } else {
      tokenClient.requestAccessToken({ prompt: '' });
  }
}

signoutButton.onclick = () => handleSignoutClick()
function handleSignoutClick() {
  const token = gapi.client.getToken();
  if (token !== null) {
      google.accounts.oauth2.revoke(token.access_token);
      gapi.client.setToken('');
      signinButton.style.display = 'block'
      signoutButton.style.display = 'none'
  }
}


// check for a Sekretariat in google drive
function checkFolder() {
  gapi.client.drive.files.list({
      'q': 'name = "Sekretariat"',
  }).then(function (response) {
      var files = response.result.files;
      if (files && files.length > 0) {
          for (var i = 0; i < files.length; i++) {
              var file = files[i];
              localStorage.setItem('parent_folder', file.id);
              console.log('Folder Available');
              // get files if folder available
              showList();
          }
      } else {
          // if folder not available then create
          createFolder();
      }
  })
}


function uploadFile2(fileInputId, statusCellId) {
    var fileInput = document.getElementById(fileInputId);
    var statusCell = document.getElementById(statusCellId);
    var file = fileInput.files[0];

    if (file) {
      const metadata = {
        name: file.name,
        mimeType: file.type,
        parents: [localStorage.getItem('parent_folder')]
      };

      var formData = new FormData();
      formData.append("metadata", new Blob([JSON.stringify(metadata)], { type: 'application/json' }));
      formData.append("file", file);

      fetch("https://www.googleapis.com/upload/drive/v3/files?uploadType=multipart", {
        method: 'POST',
        headers: new Headers({ "Authorization": "Bearer " + gapi.auth.getToken().access_token }),
        body: formData
      }).then(function (response) {
        return response.json();
      }).then(function (value) {
        console.log(value);
        showList();

        // Reset the file input after successful upload
        fileInput.value = null;

        // Setelah berhasil mengunggah, perbarui status menjadi "Success"
        statusCell.innerHTML = '<span class="badge rounded-pill text-bg-success">Success</span>';
      });
    }
  }

function createFolder() {
  var access_token = gapi.auth.getToken().access_token;
  var request = gapi.client.request({
      'path': 'drive/v2/files',
      'method': 'POST',
      'headers': {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + access_token,
      },
      'body': {
          'title': 'Sekretariat',
          'mimeType': 'application/vnd.google-apps.folder'
      }
  });
  request.execute(function (response) {
      localStorage.setItem('parent_folder', response.id);
  })
}

var expandContainer = document.querySelector('.expand-container');
var expandContainerUl = document.querySelector('.expand-container ul');
var listcontainer = document.querySelector('.list ul');
// create a function to show hide options
function expand(v) {
  var click_position = v.getBoundingClientRect();
  if (expandContainer.style.display == 'block') {
      expandContainer.style.display = 'none';
      expandContainerUl.setAttribute('data-id', '');
      expandContainerUl.setAttribute('data-name', '');
  } else {
      expandContainer.style.display = 'block';
      expandContainer.style.left = (click_position.left + window.scrollX) - 120 + 'px';
      expandContainer.style.top = (click_position.top + window.scrollY) + 25 + 'px';
      // get data name & id and store it to the options
      expandContainerUl.setAttribute('data-id', v.parentElement.getAttribute('data-id'));
      expandContainerUl.setAttribute('data-name', v.parentElement.getAttribute('data-name'));
  }
}

// function for files list
function showList() {
  gapi.client.drive.files.list({
      // get parent folder id from localstorage
      'q': `parents in "${localStorage.getItem('parent_folder')}"`
  }).then(function (response) {
      var files = response.result.files;
      if (files && files.length > 0) {
          listcontainer.innerHTML = '';
          for (var i = 0; i < files.length; i++) {
              listcontainer.innerHTML += `
              
              <li data-id="${files[i].id}" data-name="${files[i].name}">
              <span>${files[i].name}</span>
              <svg onclick="expand(this)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
              </li>
              `;
          }
      } else {
          listcontainer.innerHTML = '<div style="text-align: center;">No Files</div>'
      }
  })
}



function setStatus(status) {
    var statusColumn = document.getElementById('statusColumn');

    // Hapus konten sebelumnya dari kolom status
    statusColumn.innerHTML = '';

    // Tambahkan elemen tombol sesuai dengan status
    if (status === 'uploaded') {
        statusColumn.innerHTML = '<button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>';
    } else if (status === 'notUploaded') {
        statusColumn.innerHTML = '<button type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></button>';
    }
}


function readEditDownload(v, condition) {
  var id = v.parentElement.getAttribute('data-id');
  var name = v.parentElement.getAttribute('data-name');
  v.innerHTML = '...';
  
  gapi.client.drive.files.get({
      fileId: id,
      alt: 'media'
  }).then(function (res) {
      expandContainer.style.display = 'none';
      expandContainerUl.setAttribute('data-id', '');
      expandContainerUl.setAttribute('data-name', '');

      if (condition === 'read') {
          v.innerHTML = 'Read';
          // Handle displaying file content as needed
          console.log('Read Now');
      } else if (condition === 'download') {
          v.innerHTML = 'Download';
          var blob = new Blob([res.body], { type: 'plain/text' });
          var a = document.createElement('a');
          a.href = window.URL.createObjectURL(blob);
          a.download = name;
          a.click();
      }
  });
}


function update() {
  var updateId = document.querySelector('textarea').getAttribute('data-update-id');
  
  // Ensure the file content is obtained from the updated file input element
  var updatedFileInput = document.getElementById('fileInput');
  var updatedFile = updatedFileInput.files[0];

  if (updateId && updatedFile) {
      var url = 'https://www.googleapis.com/upload/drive/v3/files/' + updateId + '?uploadType=media';
      var formData = new FormData();
      formData.append("file", updatedFile);

      fetch(url, {
          method: 'PATCH',
          headers: new Headers({
              Authorization: 'Bearer ' + gapi.auth.getToken().access_token,
              'Content-type': updatedFile.type
          }),
          body: updatedFile
      }).then(value => {
          console.log('File updated successfully');
          document.querySelector('textarea').setAttribute('data-update-id', '');
          var updateBtn = document.getElementById('upload')[0];
          updateBtn.innerHTML = 'Backup';
          updateBtn.setAttribute('onClick', 'uploadFile()');
      }).catch(err => console.error(err));
  }
}


function deleteFile(v) {
  var id = v.parentElement.getAttribute('data-id');
  v.innerHTML = '...';
  var request = gapi.client.drive.files.delete({
      'fileId': id
  });
  request.execute(function (res) {
      console.log('File Deleted');
      v.innerHTML = 'Delete';
      expandContainer.style.display = 'none';
      expandContainerUl.setAttribute('data-id', '');
      expandContainerUl.setAttribute('data-name', '');
      // after delete update the list
      showList();
  })
}
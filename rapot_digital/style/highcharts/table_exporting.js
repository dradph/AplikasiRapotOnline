function export_table_to_excel($id) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(document.getElementById($id).outerHTML));
    return false;
}


function export_to_excel_via_server($server, $id, $title) {
    C_NAME = 'exported_data';
    form = document.createElement('form'); form.method = 'post'; form.action = $server; form.enctype = 'multipart/form-data';
    document.body.appendChild(form);
    form.style.display = 'none';
    xcontent = encodeURIComponent(document.getElementById($id).outerHTML);
    hidden1 = document.createElement('input'); hidden1.type = 'hidden'; hidden1.name = C_NAME; hidden1.value = xcontent; form.appendChild(hidden1);
    hidden2 = document.createElement('input'); hidden2.type = 'hidden'; hidden2.name = 'title_data'; hidden2.value = $title; form.appendChild(hidden2);
    form.submit();
    bin = document.createElement('div'); bin.appendChild(form); bin.innerHTML = '';
}
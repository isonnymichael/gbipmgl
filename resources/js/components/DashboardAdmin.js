import React from 'react';
import ReactDOM from 'react-dom';

function DashboardAdmin() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8 mt-5 py-5">
                    <div className="alert alert-success">Berhasil Login Pakai Component React</div>
                </div>
            </div>
        </div>
    );
}

export default DashboardAdmin;

if (document.getElementById('dashboard')) {
    ReactDOM.render(<DashboardAdmin />, document.getElementById('dashboard'));
}

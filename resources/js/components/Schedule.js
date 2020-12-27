import { Spinner, Table } from 'react-bootstrap';

import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class Schedule extends Component{
    constructor(props){
        super(props);

        this.state = {
            isLoading: false,
            imgUrl: ""
        }
    }

    componentDidMount(){
        this.setState({isLoading:true});
    }

    render(){
        // set variabel disini
        const isLoading = this.state.isLoading;

        return (
            <div>
                <Table striped bordered hover size="sm">
                    <tbody>
                        <tr>
                            <td>Minggu</td>
                            <td>06:00 - 08:00</td>
                            <td>Ibadah Pagi 1</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td>08:00 - 09:00</td>
                            <td>Ibadah Pagi 2</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td>06:00 - 08:00</td>
                            <td>Ibadah Sekolah Minggu</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td>06:00 - 08:00</td>
                            <td>Ibadah Tengah Minggu</td>
                            <td> - </td>
                        </tr>
                    </tbody>
                </Table>
            </div>
        );
    }
}

export default Schedule;

if (document.getElementById('schedule')) {
    ReactDOM.render(<Schedule />, document.getElementById('schedule'));
}

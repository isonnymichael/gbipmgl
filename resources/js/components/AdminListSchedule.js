import axios from 'axios'

import { Spinner, Table } from 'react-bootstrap';

import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class AdminListSchedule extends Component{
    constructor(props){
        super(props);

        this.state = {
            isLoading: false,
            schedules: []
        }
    }

    componentDidMount(){
        this.setState({isLoading:true});
        const api_token = 'lzjd9uda9sdaodjakdhod';
        this.setState({isLoading:true});
        axios.get('api/schedule', {
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer '+api_token
            },      
        })      
        .then((response) => {
          console.log('response',response.data.data)
          var data = response.data.data;
          this.setState({schedules:data, isLoading:false})
        })
        .catch((error) => {
          alert('error',error)
          this.setState({isLoading:false});
        })
    }

    render(){
        // set variabel disini
        const isLoading = this.state.isLoading;

        if (isLoading) {
            return <Spinner className="text-center" animation="border" />
          }

        return (
            <div>
                <Table striped bordered hover size="sm" className="m-0">
                    <tbody>
                    {this.state.schedules.map(
                        s =>
                            <tr id={s.id} key={s.id}>
                                <td>{s.day}</td>
                                <td>{s.hour_start}</td>
                                <td>{s.name}</td>
                            </tr>
                    )}
                    </tbody>
                </Table>
            </div>
        );
    }
}

export default AdminListSchedule;

if (document.getElementById('admin-list-schedule')) {
    ReactDOM.render(<AdminListSchedule />, document.getElementById('admin-list-schedule'));
}

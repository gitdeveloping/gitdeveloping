import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import {Icon} from 'react-fa'

export default class ChallengeTable extends Component {
    constructor() {
        super();
        this.state = {
            challenges: []
        };

    }

    componentWillMount() {
        axios.get('/api/challenges').then(response => {
            this.setState({challenges: response.data});
        }).catch(error => console.log(error));
    }

    render() {
        return (
            <div className="container p-0">
                <div className="card mb-2 text-left">
                    <div className="row">
                        <button className="btn btn-rounded btn-outline-primary ml-3">JavaScript</button>
                        <button className="btn btn-rounded btn-outline-primary ml-2">PHP</button>
                    </div>
                </div>

                <div className="card mb-2 text-left">
                    <div className="row">
                        <div className="col-md-1">
                            ID
                        </div>
                        <div className="col-md-3">
                            Challenge Title
                        </div>
                        <div className="col-md-2">
                            Pass/Fail
                        </div>
                        <div className="col-md-2">
                            Efficiency
                        </div>
                        <div className="col-md-2">
                            Bytes
                        </div>
                        <div className="col-md-2">
                            Creator
                        </div>
                    </div>
                </div>


                <div className="card mb-2 text-left">
                    <div className="row">
                        <div className="col-md-1">
                            1.
                        </div>
                        <div className="col-md-3">
                            Modulus Numbers
                        </div>
                        <div className="col-md-2">
                            PASSED
                        </div>
                        <div className="col-md-2">
                            <Icon star name="star" />
                        </div>
                        <div className="col-md-2">
                            <Icon star name="star" />
                        </div>
                        <div className="col-md-2">
                            <a className="" href="#">Jared Wheatley</a>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('challenge-table')) {
    ReactDOM.render(<ChallengeTable />, document.getElementById('challenge-table'));
}

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
            console.log(response.data.data);
            this.setState({challenges: response.data.data});
        }).catch(error => console.log(error));
    }

    render() {
        return (
            <div className="container p-0">
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

                {this.state.challenges.map((challenge, i) => {

                    return <a href={'challenges/'+challenge.id}>
                        <div className="card mb-2 text-left">
                            <div className="row">
                                <div className="col-md-1">
                                    {challenge.id}.
                                </div>
                                <div className="col-md-3">
                                    {challenge.title}
                                </div>
                                <div className="col-md-2">
                                    PASSED
                                </div>
                                <div className="col-md-2">
                                    <Icon star name="star"/>
                                </div>
                                <div className="col-md-2">
                                    <Icon star name="star"/>
                                </div>
                                <div className="col-md-2">
                                    <a className="" href="#">{challenge.created_by.first_name + ' ' + challenge.created_by.last_name}</a>
                                </div>
                            </div>
                        </div>
                    </a>
                })}
            </div>
        );
    }
}

if (document.getElementById('challenge-table')) {
    ReactDOM.render(<ChallengeTable />, document.getElementById('challenge-table'));
}

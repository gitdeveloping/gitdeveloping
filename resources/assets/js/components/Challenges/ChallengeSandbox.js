import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import {Icon} from 'react-fa'

import brace from 'brace';
import AceEditor from 'react-ace';

import 'brace/mode/java';
import 'brace/theme/github';

export class ChallengeSandbox extends Component {
    constructor() {
        super();

        this.state = {};
    }


    onChange(newValue) {
    }

    componentWillMount() {

    }

    // Render editor
    render() {
        return <div>
            <AceEditor
                mode="javascript"
                theme="github"
                onChange={this.onChange}
                name="editor"
                editorProps={{$blockScrolling: true}}
            />
        </div>
    }
}

if (document.getElementById('challenge-sandbox')) {
    console.warn('rendering');
    ReactDOM.render(<ChallengeSandbox/>, document.getElementById('challenge-sandbox'));
}

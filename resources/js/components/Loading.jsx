import React from 'react';
import {ThreeDots} from "react-loader-spinner";

function Loading() {
    return <div className="loader">
    <div
        style={{
            width: "100%",
            height: "100",
            display: "flex",
            justifyContent: "center",
            alignItems: "center"
        }}
    >
    <ThreeDots color="#dc9500" height="100" width="100" />
        </div>
    </div>;
}

export default Loading;
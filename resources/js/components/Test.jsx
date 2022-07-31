import React, { useEffect } from "react";
import ReactDOM from "react-dom";
import { useTimer } from "use-timer";

function Test() {
    const { time, start, pause, reset, status } = useTimer();
    useEffect(() => {
        start();
    }, []);
    return <div>{time}</div>;
}

export default Test;

if (document.getElementById("test")) {
    ReactDOM.render(<Test />, document.getElementById("test"));
}

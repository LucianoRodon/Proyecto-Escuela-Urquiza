import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import RoutesLanding from "./Routes";
import { ContextProvider, ModalProvider } from "./Components/Contexts";
import { BrowserRouter } from "react-router-dom";
import Header from "./Components/Header";

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <BrowserRouter>
      <ModalProvider>
        <ContextProvider>
          <Header />
          <RoutesLanding />
        </ContextProvider>
      </ModalProvider>
    </BrowserRouter>
  </React.StrictMode>
);

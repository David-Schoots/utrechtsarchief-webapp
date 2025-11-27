import { BrowserRouter, Routes, Route } from "react-router-dom";
import App from "./App";
import CmsPage from "./cms/CmsPage";
import CmsEdit from "./cms/CmsEdit";
import { CmsDataProvider } from "./cms/CmsDataContext";

export default function Router() {
  return (
    <CmsDataProvider>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<App />} />
          <Route path="/cms" element={<CmsPage />} />
          <Route path="/cms/edit/:id" element={<CmsEdit />} />
        </Routes>
      </BrowserRouter>
    </CmsDataProvider>
  );
}

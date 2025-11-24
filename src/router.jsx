import { BrowserRouter, Routes, Route } from "react-router-dom";
import CmsPage from "./cms/cmspage";
import CmsEdit from "./cms/CmsEdit";

export default function Router() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/cms" element={<CmsPage />} />
        <Route path="/cms/edit/:id" element={<CmsEdit />} />
      </Routes>
    </BrowserRouter>
  );
}

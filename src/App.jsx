import AppRouter from "./router";
import { CmsDataProvider } from "./cms/CmsDataContext";

export default function App() {
  return (
    <CmsDataProvider>
      <AppRouter />
    </CmsDataProvider>
  );
}

export default function CmsShell({ children }) {
  return (
    <div className="cms-shell">
      <header className="cms-header">
        <div className="cms-header__inner">
          <p className="cms-header__title">Het Utrechts Archief</p>
          <p className="cms-header__subtitle">Content Management Systeem</p>
        </div>
      </header>

      <main className="cms-main">{children}</main>
    </div>
  );
}

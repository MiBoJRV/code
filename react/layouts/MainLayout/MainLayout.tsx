import React from 'react';
import { Header, Footer } from 'src/components';
import { PageContainer } from 'src/ui-kit';

export const MainLayout: React.FC<React.PropsWithChildren> = ({
  children,
}): JSX.Element => (
  <div>
    <div className="page-background-noise bg-noise -z-40"></div>
    <div className="page-background-spots bg-colorful-spots -z-50 lg:bg-auto"></div>
    <Header />
    <main className="pt-[78px] lg:pt-[102px]">
      <PageContainer>{children}</PageContainer>
    </main>
    <Footer />
  </div>
);

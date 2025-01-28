import React from 'react';

export const PageContainer: React.FC<React.PropsWithChildren> = ({
  children,
}): JSX.Element => (
  <div className="w-[100%] m-auto px-[20px] lg:px-[30px] xl:px-[70px] max-w-screen-1xl">
    {children}
  </div>
);

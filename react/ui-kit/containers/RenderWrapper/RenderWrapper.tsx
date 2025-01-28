import React, { ReactElement, useEffect, useState } from 'react';

type RenderWrapperProps = {
  children: ReactElement;
};

// NOTE: Use this HOC when you need to check rendering type: SSR or CSR and to fix issue with hydration
export const RenderWrapper: React.FC<RenderWrapperProps> = ({
  children,
}): JSX.Element | null => {
  const [isSSR, setIsSSR] = useState<boolean>(true);

  useEffect(() => {
    setIsSSR(false);
  }, []);

  return !isSSR ? children : null;
};

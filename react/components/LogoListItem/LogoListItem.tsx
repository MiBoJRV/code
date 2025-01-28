import React from 'react';
import { SaasLogoType } from 'src/types';

export const LogoListItem: React.FC<SaasLogoType> = ({
  icon,
  className,
}): JSX.Element => (
  <li className="flex items-center">
    <div className={className}>{icon}</div>
  </li>
);
